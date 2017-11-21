pipeline {
  agent any
  stages {
    stage('Test') {
      steps {
        sh 'codecept run --steps'
      }
    }
    stage('End') {
      steps {
        echo 'OK'
      }
    }
  }
}