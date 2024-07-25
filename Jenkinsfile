pipeline {
    agent any

    environment {
        PATH = "${tool 'Git'}/bin:${env.PATH}"
        COMPOSER_CACHE_DIR = '/tmp'
    }

    triggers {
        githubPush()  // Déclencher le pipeline sur un push GitHub
    }

    stages {
        stage('Checkout') {
            steps {
                // Cloner le dépôt GitHub et surveiller toutes les branches
                checkout scm
            }
        }
        stage('Install Composer') {
            steps {
                script {
                    // Télécharger Composer si non présent
                    if (!fileExists('composer.phar')) {
                        sh 'php -r "copy(\'https://getcomposer.org/installer\', \'composer-setup.php\');"'
                        sh 'php composer-setup.php'
                        sh 'php -r "unlink(\'composer-setup.php\');"'
                    }
                }
            }
        }
        stage('Install Dependencies') {
            steps {
                // Installer les dépendances sans les packages de développement
                sh 'php composer.phar install --no-dev --optimize-autoloader'
            }
        }
        stage('Build Docker Image') {
            steps {
                script {
                    dockerImage = docker.build("symfony-app:${env.BUILD_ID}")
                }
            }
        }
        stage('Run Tests') {
            steps {
                // Exécuter les tests
                sh 'docker-compose run php bin/phpunit --log-junit tests/report.xml'
            }
            post {
                always {
                    // Publier les résultats des tests
                    junit 'tests/report.xml'
                }
            }
        }
        stage('Deploy to remote') {
            steps {
                script {
                    sh '''
                        docker-compose down
                        docker-compose up -d
                    '''
                }
            }
        }
    }
    post {
        always {
            // Notification par e-mail
            mail to: 'mohamedaminehaddoualla@gmail.com',
                 subject: "Build ${currentBuild.fullDisplayName}",
                 body: "Build ${currentBuild.fullDisplayName} completed. Check console output at ${env.BUILD_URL}"
        }
    }
    ///p
}
