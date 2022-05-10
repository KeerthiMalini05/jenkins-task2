pipeline {
    agent { label 'keerthi-master-node' }
    stages
    {
        stage('docker compose'){
            steps {
                checkout scm
                sh 'docker version'
                sh 'docker-compose up --build -d'
            }
        }
    }
}
