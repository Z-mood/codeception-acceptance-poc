pipeline {
  agent any
  stages {
    stage('Test') {
      steps {
        sh '''cd ./site/www/
pwd
./vendor/codeception/codeception/codecept run --steps'''
      }
    }
  }
}