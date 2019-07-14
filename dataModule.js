var dataModule = (function(){

    var lineReturn = '|';

    //shuffle function
    var shuffle = function(array){
        //[1, 2, 3] -> [3, 1, 2]
        //newArray[]
        //select random element: 2
        //newArray[2]
        //oldArray[1, 3]
        //select random element: 1
        //newArray[2, 1]
        //oldArray[3]
        //select random element: 3
        //newArray[2, 1, 3]
        //oldArray[]
        var newArray = [];
        var randomIndex;
        var randomElement;
        while(array.length > 0){
            //take a random element from array and add it to newArray
            randomIndex = Math.floor(Math.random() * array.length);
            randomElement = array[randomIndex];
            newArray.push(randomElement);
            //delete randomElement from array
            array.splice(randomIndex, 1);
        }
        return newArray;
    };

    //capitalize first letter of a string
    String.prototype.capitalize = function(){
        var newString = '';
        var firstCharCap = this.charAt(0).toUpperCase();
        var remainingChar = this.slice(1);
        newString = firstCharCap + remainingChar;
        return newString;
    };

    //capitalizeRandom function
    //array['word1', 'word2', 'word3']
    //array['Word1', 'word2', 'Word3']
    var capitalizeRandom = function(arrayOfStrings){
        return arrayOfStrings.map(function(currentWord){
            var x = Math.floor(4 * Math.random()); //chances of x equal to 3: 25%
            return (x == 3)? currentWord.capitalize() : currentWord;
        })
    };


    //addRandomPunctuation function
    //array['word1', 'word2', 'word3']
    //array['word1.', 'word2?', 'word3,']
    var addRandomPunctuation = function(arrayOfStrings){
        return arrayOfStrings.map(function(currentWord){
            var randomPunctuation;
            var items = [lineReturn, '?', ',', ',', ',', ',', '.', '.', '!', '',  '', '',  '',  '', '', ''];
            var randomIndex = Math.floor(Math.random() * items.length);
            randomPunctuation = items[randomIndex];

            return currentWord + randomPunctuation;
        });
    };
    // userd to calculate the number of correct characters inside the current word
    var nbCorrectCharacters;
    var characterCallback = function (currentElement, index) {
      nbCorrectCharacters += (currentElement == this.characters.user[index])? 1: 0;
    };

    var appData = {
        indicators: {
            testStarted: false, testEnded: false, totalTestTime: 0, timeLeft: 0
        },
        results: {
            wpm: 0, wpmChange: 0, cpm: 0, cpmChange: 0, accuracy: 0, accuracyChange: 0 ,   numOfCorrectWords: 0, numOfCorrectCharacters: 0 , numOfTestCharacters: 0
        },
        words: {
            currentWordIndex: -1, testWords: [], currentWord: {}
        },
    };



    //word constructor
//    {
//      value: {correct: '', user: '' , isCorrect: false },
//      characters: {correct: [], user: [], totalCorrect: 0, totalTest: 0 }
//    }

    var word = function(index){
      // word values correct vs user's
      this.value = {
        correct: appData.words.testWords[index] + " ",
        user: "",
        isCorrect: false
      };

      // characters : correct vs user's
      this.characters = {
        correct: this.value.correct.split(""),
        user: [],
        isCorrect: 0,
        totalTest: this.value.correct.length
      };
    };

    //update method
    word.prototype.update = function(value){
      // update user input
      this.value.user = value;
      // update word status (correct or not)
      this.value.isCorrect =(this.value.correct == this.value.user);
      // update users characaters
      this.characters.user = this.value.user.split("");
      // calculate the number of correct characters
      nbCorrectCharacters = 0;
      var characterCallback2 = characterCallback.bind(this);
      this.characters.correct.forEach(characterCallback2);
      this.characters.totalCorrect = nbCorrectCharacters;
    };

    return {
    //indicators - test Control

        setTestTime: function(x){
          appData.indicators.totalTestTime = x;
        },//sets the total test time to x

        initializeTimeLeft: function(){
          appData.indicators.timeLeft = appData.indicators.totalTestTime;
        },//initializes time left to the total test time

        startTest: function(){
          appData.indicators.testStarted = true;
        },//starts the test

        endTest: function(){
          appData.indicators.testEnded = true;
        },//ends the test

        getTimeLeft: function(){
          return appData.indicators.timeLeft;
        },//return the remaining test time

        reduceTime: function(){
          appData.indicators.timeLeft --;
          return appData.indicators.timeLeft;
        },// reduces the time by one sec

        timeLeft: function(){
          return appData.indicators.timeLeft != 0;
        },//checks if there is time left to continue the test

        testEnded: function(){
          return appData.indicators.testEnded;
        },//checks if the test has already ended

        testStarted: function(){
          return appData.indicators.testStarted;
        },//checks if the test has started

    //results

        calculateWpm: function(){
          var wpmOld = appData.results.wpm;
          var numOfCorrectWords = appData.results.numOfCorrectWords;
          if (appData.indicators.timeLeft != appData.indicators.totalTestTime) {
            appData.results.wpm = Math.round((60 * numOfCorrectWords) / (appData.indicators.totalTestTime - appData.indicators.timeLeft));
          }else {
            appData.results.wpm = 0;
          }
          appData.results.wpmChange = appData.results.wpm - wpmOld;
          return [appData.results.wpm, appData.results.wpmChange];
        },//calculates wpm and wpmChange and updates them in appData

        calculateCpm: function(){
          var cpmOld = appData.results.cpm;
          var numOfCorrectCharacters = appData.results.numOfCorrectCharacters;
          if(appData.indicators.timeLeft != appData.indicators.totalTestTime){
              appData.results.cpm = Math.round(60 * numOfCorrectCharacters/(appData.indicators.totalTestTime - appData.indicators.timeLeft));
          }else{
              appData.results.cpm = 0;
          }
          appData.results.cpmChange = appData.results.cpm - cpmOld;

          return [appData.results.cpm, appData.results.cpmChange];
        },//calculates cpm and cpmChange and updates them in appData

        calculateAccuracy: function(){
          var accuracyOld = appData.results.accuracy;
          var numOfCorrectCharacters = appData.results.numOfCorrectCharacters;
          var numOfTestCharacters = appData.results.numOfTestCharacters;
          if(appData.indicators.timeLeft != appData.indicators.totalTestTime){
            if (numOfTestCharacters != 0) {
                appData.results.accuracy = Math.round(100 * (numOfCorrectCharacters/numOfTestCharacters));
            }else {
              appData.results.accuracy = 0;
            }
          }else{
              appData.results.accuracy = 0;
          }
          appData.results.accuracyChange = appData.results.accuracy - accuracyOld;

          return [appData.results.accuracy, appData.results.accuracyChange];
        },//calculates accuracy and accuracyChange and updates them in appData

    //test words

        // fills words.testWords
        fillListOfTestWords: function(textNumber, words){
            var result = words.split(" ");

            if(textNumber == 0){
                //shuffle words
                result = shuffle(result);
                //capitalise random strings
                result = capitalizeRandom(result);
                //add a random punctuation
                result = addRandomPunctuation(result);
            }


            appData.words.testWords = result;
        },

        // get list of test words: words.testWords
        getListofTestWords: function(){
            return appData.words.testWords;
        },

        moveToNewWord: function(){
          if (appData.words.currentWordIndex > -1) {
            // update the number of correct words
            if (appData.words.currentWord.value.isCorrect == true) {
              appData.results.numOfCorrectWords ++;
            }
            // update of the number of correct characters
            appData.results.numOfCorrectCharacters += appData.words.currentWord.characters.totalCorrect;
            // update the number of test characters
            appData.results.numOfTestCharacters += appData.words.currentWord.characters.totalTest;
          }
          appData.words.currentWordIndex ++;
          var currentIndex = appData.words.currentWordIndex;
          var newWord = new word(currentIndex);
          appData.words.currentWord = newWord;

        },// increments the currentWordIndex - updates the current word (appData.words.currentWord) by creating a new instance of the word class - updates numOfCorrectWords, numOfCorrectCharacters and numOfTestCharacters

        // get the current word
        getCurrentWordIndex(){
          return appData.words.currentWordIndex;
        },

        // get current word
        getCurrentWord(){
          var currentWord = appData.words.currentWord;
          return {
            value: {
              correct: currentWord.value.correct,
              user: currentWord.value.user
            }
          };
        },

        updateCurrentWord: function(value){
          appData.words.currentWord.update(value);
        },// updates current word using user input

        getLineReturn(){
            return lineReturn;
        },
        generateCertificateData(){
          return {
            wpm: appData.results.wpm,
            accuracy: appData.results.accuracy
          };
        },

        returnData(){
            console.log(appData);
        }

    }

})();
