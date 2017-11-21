pipeline {
  agent any
  stages {
    stage('Test') {
      steps {
        sh './site/www/vendor/codeception/codeception/codecept run --steps'
      }
    }
  }
}