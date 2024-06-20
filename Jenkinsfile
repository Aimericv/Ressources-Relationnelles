pipeline {
    agent any

    environment {
        PATH = "${tool 'Git'}/bin:${env.PATH}"
        COMPOSER_CACHE_DIR = '/tmp'
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
                        bat 'php -r "copy(\'https://getcomposer.org/installer\', \'composer-setup.php\');"'
                        bat 'php composer-setup.php'
                        bat 'php -r "unlink(\'composer-setup.php\');"'
                    }
                }
            }
        }
        stage('Install Dependencies') {
            steps {
                // Installer les dépendances sans les packages de développement
                bat 'php composer.phar install --no-dev --optimize-autoloader'
            }
        }
        stage('Run Tests') {
            steps {
                // Exécuter les tests
                bat 'php bin/phpunit --log-junit tests/report.xml'
            }
            post {
                always {
                    // Publier les résultats des tests
                    junit 'tests/report.xml'
                }
            }
        }
    }
    post {
        always {
            // Notification par e-mail
            mail to: 'team@example.com',
                 subject: "Build ${currentBuild.fullDisplayName}",
                 body: "Build ${currentBuild.fullDisplayName} completed. Check console output at ${env.BUILD_URL}"
        }
    }
}
