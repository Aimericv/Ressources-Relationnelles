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
                script {
                    checkout([
                        $class: 'GitSCM',
                        branches: [[name: '*/main']],
                        userRemoteConfigs: [[url: 'https://github.com/Aimericv/Ressources-Relationnelles.git']]
                    ])
                }
            }
        }
        stage('### install composer...') {
            steps {
                script {
                    if (!fileExists('composer.phar')) {
                        sh 'php -r "copy(\'https://getcomposer.org/installer\', \'composer-setup.php\');"'
                        sh 'php composer-setup.php'
                        sh 'php -r "unlink(\'composer-setup.php\');"'
                    }
                }
            }
        }
        stage('### Installation des dépendances...') {
            steps {
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
        stage('R### Exécution des tests...') {
            steps {
                sh 'docker-compose run php bin/phpunit --log-junit tests/report.xml'
            }
            post {
                always {
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
}
