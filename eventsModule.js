var eventsModule = (function(dModule, uModule, cModule, wModule){
    var addEventListeners = function(){
      // enter press event
      uModule.getDOMElements().textInput.addEventListener("keydown", function (event) {
        // if the test ended, do nothing
        if (dModule.testEnded()) {
          return;
        }
        // check if the user pressed Enter
        var key = event.keyCode;
        if (key == 13) {
          uModule.getDOMElements().textInput.value += dModule.getLineReturn() + " ";
          // create a new 'input' event
          var inputEvent = new Event("input");
          //dispatch it
          uModule.getDOMElements().textInput.dispatchEvent(inputEvent);
        }
      });

        //character typing event listener
        uModule.getDOMElements().textInput.addEventListener("input", function (event) {
          // if the test ended, do nothing
          if (dModule.testEnded()) {
            return;
          }

          // if the test has not started yet, start the test and countdown
          if (!dModule.testStarted()) {
            // start the test: data module
            dModule.startTest();
            // start a counter
            var b = setInterval(function () {
              // calculate the results : data module
              var results = {};
              // update wpm, wpmChange: data module
              [results.wpm, results.wpmChange] = dModule.calculateWpm();
              // update cpm, cpmChange: data module
              [results.cpm, results.cpmChange] = dModule.calculateCpm();
              // update accuracy, accuracyChange: data module
              [results.accuracy, results.accuracyChange] = dModule.calculateAccuracy();
              //dModule.returnData();
              // update results : UI module
              uModule.updateResults(results);
              // update time left
              // check if we have time left
              // reduce the time by one second : data module
              // update the time remaining : UI module
              // if we have no time left
              // end the test: data module
              // fill the modal
              // show the modal
              if (dModule.timeLeft()) {
                // reduce time by one sec: data Module
                var timeLeft = dModule.reduceTime();
                uModule.updateTimeLeft(timeLeft);
              }else {
                clearInterval(b);
                dModule.endTest();
                dModule.returnData();
                // fill modal
                uModule.fillModal(results.wpm);
                // show modal
                uModule.showModal();
              }
            }, 1000);
          }

          // get typed word: UI module
          var typedWord = uModule.getTypedWord();

          // update current word: data Module
          dModule.updateCurrentWord(typedWord);
          // format the active word
          var currentWord = dModule.getCurrentWord();
          uModule.formatWord(currentWord);

          // check if the user pressed space or enter
          if (uModule.spacePressed(event) || uModule.enterPressed(dModule.getLineReturn())) {
            // empty the text input
            uModule.emptyInput();
            // deactivate  current word
            uModule.deactivateCurrentWord();
            // move to a new word: data module
            dModule.moveToNewWord();
            // set the active word: UI module
            var index = dModule.getCurrentWordIndex();
            uModule.setActiveWord(index);
            // format the active word: UI module
            var currentWord = dModule.getCurrentWord();
            uModule.formatWord(currentWord);
            // scroll the word into the middle view
            uModule.scroll();
          }
        });

        //click on download button event listener
        uModule.getDOMElements().download.addEventListener('click', function (event) {
          if (uModule.isNameEmpty()) {
            uModule.flagNameInput();
          }else {
            var certificateData = dModule.generateCertificateData();
            cModule.generateCertificate(certificateData);
          }
        });

    };
    // scroll active word into middle view on window resize
    window.addEventListener("resize", uModule.scroll);

    return {
        //init function, initializes the test before start
        init: function(duration, textNumber){

            //fill the list of test words: data Module

            var words = wModule.getWords(textNumber);
            dModule.fillListOfTestWords(textNumber, words);

            //fill the list of test words: UI Module
            var lineReturn = dModule.getLineReturn();
            var testWords = dModule.getListofTestWords();
            uModule.fillContent(testWords, lineReturn);

            //set the total test time: data Module
            dModule.setTestTime(duration);

            //update time left: data Module
            dModule.initializeTimeLeft();

            //update time left: UI module
            var timeLeft = dModule.getTimeLeft();
            uModule.updateTimeLeft(timeLeft);

            //move to a new word: data Module
            dModule.moveToNewWord();

            //set active Word: UI Module
            var index = dModule.getCurrentWordIndex();
            uModule.setActiveWord(index);

            //format the active word: UI Module
            var currentWord = dModule.getCurrentWord();
            uModule.formatWord(currentWord);

            //focus on text input: UI Module
            uModule.inputFocus();


            //add avent listeners
            addEventListeners();
        }
    };


})(dataModule, UIModule, certificateModule, wordsModule);
