pipeline {
    agent any
    stages {
        stage('Checkout') {
            steps {
                git branch: 'dev', url: 'https://github.com/Dill4n/EC-CodeSpace-.git'
            }
        }

        stage('Syntax Check') {
            steps {
                sh 'find . -name "*.php" -exec php -l {} \\;'
            }
        }
    }
}

