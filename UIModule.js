var UIModule = (function(){

    //classes used to select HTML elements
    var DOMElements = {
        //indicators - test control
        timeLeft: document.getElementById("timeLeft"), //HTML element displaying time left
        //test results
        wpm: document.getElementById("wpm"),
        wpmChange: document.getElementById("wpmChange"),
        cpm: document.getElementById("cpm"),
        cpmChange: document.getElementById("cpmChange"),
        accuracy: document.getElementById("accuracy"),
        accuracyChange: document.getElementById("accuracyChange"),
        //user input
        textInput: document.querySelector("#input"),
        nameInput: document.querySelector(".form-group"),
        nameField: document.getElementById("name"),
        //test words
        content:document.getElementById('content'),
        activeWord:'',
        //modal
        modal: $("#myModal"),
        download: document.getElementById("download")
    };

    var splitArray = function(string){
        return string.split("");
    };

    var addSpace = function(array){
        array.push(" ");
        return array;
    };

    var addSpanTags = function(array){
        return array.map(function(currentCharacter){
            return "<span>" + currentCharacter + "</span>";
        });
    };

    var addWordSpanTags = function(array){
        array.push('</span>');
        array.unshift('<span>');
        return array;
    };

    var joinEachWord = function(array){
        return array.join('');
    };
    var userValue;
    var returnCharClass = function (currentCharacter, index) {
      return (index < userValue.length)? (currentCharacter == userValue[index]? "correctCharacter" : "wrongCharacter"): "0";
    };
    var updateChange = function (value, changeElement) {
      // determine the class to add to the change element and html content to insert
      var classToAdd, html;
      [classToAdd, html] = (value >= 0)? ["scoreUp", "+" + value] : ["scoreDown", value];
      // add % to the percentage change
      if (changeElement == DOMElements.accuracyChange) {
        html += "%";
      }
      // update the change element
      changeElement.innerHTML = html;
      // style the change element
      changeElement.removeAttribute("class");
      changeElement.className = classToAdd;
      // fade Element
      fadeElement(changeElement);
    };
    var fadeElement = function (element) {
      element.style.opacity = 1;
      setTimeout(function () {
        element.style.opacity = 0.7;
      }, 100);
    };

    return {

    //get DOM elements

        getDOMElements: function(){
          return {
            textInput: DOMElements.textInput,
            download: DOMElements.download
          };
        },

    //Indicators - Test Control

        updateTimeLeft: function(x){
          DOMElements.timeLeft.innerHTML = x;
        },

    //results

        updateResults: function(results){
          // update wpm
          DOMElements.wpm.innerHTML = results.wpm;
          // update cpm
          DOMElements.cpm.innerHTML = results.cpm;
          // update accuracy
          DOMElements.accuracy.innerHTML = results.accuracy + "%";
          // update changes
          updateChange(results.wpmChange, DOMElements.wpmChange);
          updateChange(results.cpmChange, DOMElements.cpmChange);
          updateChange(results.accuracyChange, DOMElements.accuracyChange);
        },

        fillModal: function(wpm){
          var results;
          if (wpm < 40) {
            results = {
              type: 'turtle',
              image: 'turtle.jpg',
              level: "Beginner"
            };
          }else if (wpm < 70) {
            results = {
              type: 'horse',
              image: 'horse.jpg',
              level: "Average"
            };
          }else {
            results = {
              type: 'puma',
              image: 'puma.jpg',
              level: "Breath Taking"
            };
          }
          var html = '<div class="result"><p>You are a %type%!</p><p>You type at a speed of %wpm% words per minute!</p><img width="300" height="200" src="images/%image%" class="rounded-circle" alt="%alt%"></div>';
          html = html.replace('%type%', results.type);
          html = html.replace('%wpm%', wpm);
          html = html.replace('%image%', results.image);
          html = html.replace('%alt%', results.type);
          // insert html before form-group
          DOMElements.nameInput.insertAdjacentHTML("beforebegin", html);
          // store the level in download button
          DOMElements.download.setAttribute("level", results.level);
        },

        showModal: function(){
          DOMElements.modal.modal("show");
        },

    //user input

        inputFocus: function(){
          DOMElements.textInput.focus();
        },

        isNameEmpty: function(){
          return DOMElements.nameField.value == "";
        },

        flagNameInput: function(){
          DOMElements.nameField.style.borderColor = 'red';
        },

        spacePressed: function(event){
          return event.data == " ";
        },

        enterPressed: function(lineReturn){
          return this.getTypedWord().includes(lineReturn + " ");
        },

        emptyInput: function(){
          DOMElements.textInput.value = "";
        },

        getTypedWord: function(){
          console.log(DOMElements.textInput.value);
          return DOMElements.textInput.value;
        },

    //test words

        fillContent: function(array, lineReturn){
            var content = array.map(splitArray);
            content = content.map(addSpace);
            content = content.map(addSpanTags);
            content = content.map(addWordSpanTags);
            content = content.map(joinEachWord);
            content = content.join('');
            content = content.split('<span>' + lineReturn + '</span>').join('<span>&crarr;</span>');
            //fill content
            DOMElements.content.innerHTML = content;
        },

        formatWord: function(wordObject){
          var activeWord = DOMElements.activeWord;
          //highlight
          activeWord.className = "activeWord";
          // format individual character
          var correctValue = wordObject.value.correct;
          userValue = wordObject.value.user;
          // correct value 'word1'
          var classes = Array.prototype.map.call(correctValue, returnCharClass);
          // HTML collection
          var characters = activeWord.children;
          // add classes to children
          for(var i = 0; i < characters.length; i ++){
            characters[i].removeAttribute("class");
            characters[i].className = classes[i];
          }

        },

        setActiveWord: function(index){
          DOMElements.activeWord = DOMElements.content.children[index];
        },

        deactivateCurrentWord: function(){
          DOMElements.activeWord.removeAttribute("class");
        },

        scroll: function(){
          var activeWord = DOMElements.activeWord;
          var top1 = activeWord.offsetTop;
          var top2 = DOMElements.content.offsetTop;
          var diff = top1 - top2;
          // scroll the content of the content box
          DOMElements.content.scrollTop = diff - 40;
        }

    }
})();
