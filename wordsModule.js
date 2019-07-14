var wordsModule = (function(){
    var words = [
        `The espers of Academy City are classified into six levels, where "Level 0" lacks power while "Level 5" possesses an overwhelming amount. | Of the several million espers residing in Academy City, only seven of them have attained Level 5, and ranked highest among them is the one known as Accelerator. | Toaru Kagaku no Accelerator focuses on the strongest Level 5 after he protects the cheerful Last Order at the price of much of his power. Recovering at the hospital, Accelerator has led a relatively quiet life until he ends up saving the life of Estelle Rosenthal, a mysterious girl carrying a photo of Last Order. | Unfortunately, Accelerator now finds himself dragged into a new conflict in the form of a sinister organization called Disciplinary Action which plots to use Last Order for a dangerous mission. | Now that they have set their plan into motion and are in pursuit of the young girl, it's up to the world's most powerful esper and his newfound companion to protect Last Order and defend Academy City in the process.`,

        `Year 198 of the Solar Era in Tokyo, special fire brigades are fighting against a phenomenon called spontaneous human combustion where humans beings are turned into living infernos called "Infernals." While the Infernals are first generation cases of spontaneous human combustion, later generations possess the ability to manipulate flames while retaining human form. Shinra Kusakabe, a youth who gained the nickname Devil's Footprints for his ability to ignite his feet at will, joins the Special Fire Force Company 8 which composes of other flames users as they work to extinguish any Infernals they encounter. As a faction that is creating Infernals appears, Shira begins to uncover the truth behind a mysterious fire that caused the death of his family twelve years ago.`,

        `One fateful day, all of humanity was petrified by a blinding flash of light. After several millennia, high schooler Taiju awakens and finds himself lost in a world of statues. However, he’s not alone! His science-loving friend Senku’s been up and running for a few months and he's got a grand plan in mind—to kickstart civilization with the power of science! `
    ];

    return{
        getWords(textNumber){
            return words[textNumber];
        }
    }
})();
