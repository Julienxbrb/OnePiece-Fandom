var audio = document.getElementById("ost-op");
audio.volume = 0.1;

// An array of possible quotes
var quotes = [
  `" Il y a des duels que même des lâches doivent gagner lorsque quelqu'un se moque des rêves d'un ami. "<br>― Usopp`,
  `" La Mer est vaste. Un jour, sans aucun doute, des amis qui te protégerons apparaîtront : personne est né dans ce monde pour être tout seul ! "<br>― Haguar D. Sauro`,
  `" L'histoire est le trésor de l'humanité. "<br>― Nico Olvia`,
  `" Je n'ai pas de compassion pour les criminels...
  mais pour ma famille, j'en ai ! "<br>― Monkey D. Garp`,
  `" Connaitre aussi bien la victoire que la défaite, fuir et verser des larmes, c'est ce qui fera de toi un homme. "<br>― Shanks`,
  `"Chacun a droit à son moment de gloire."<br>― Gol D. Roger`,
  `" Tu ne peux pas atteindre le Roi du premier coup, tu sais ? "<br>― Marco`,
  `" Les gens ne cesseront jamais d'avoir des rêves ! "<br>― Barbe Noire`,
  `" La force en elle-même ne m’intéresse pas. Sauf si c’est pour défendre ceux qui me sont chers! "<br>― Monkey D. Luffy`,
  `" Je ne ferais rien que je puisse regretter un jour. "<br>― Portgas D. Ace`,
  `" N'oublie jamais qu'à la douleur succède le soulagement. "<br>― Dr. Kureha`,
  `" Les chiens qui fuient pour lécher leurs blessures n'ont aucun droit de parler Justice. C'est une des règles de la mer. "<br>― Crocodile`,
  `"La passion et les rêves sont comme le temps, rien ne peut les arrêter et il en sera ainsi tant qu’il y aura des hommes prêts à donner un sens au mot Liberté.<br>― Gol D. Roger`,
];
var currentQuote = 0;

function nextQuote(showImmediately) {
  // We can use a promise to make sure that we don't switch the
  // quote out until the text is hidden
  var hidden = $.Deferred();

  if (!showImmediately)
    $("#quotes").fadeOut("slow", function () {
      hidden.resolve();
    });
  else hidden.resolve();

  // Once the promise is resolved, go ahead and modify the DOM
  hidden.promise().done(function () {
    // Get a quote that's not the current one
    // (we may need to try a few times if it's a small array
    var randomIndex = currentQuote;
    while (randomIndex == currentQuote) {
      randomIndex = Math.floor(Math.random() * quotes.length);
    }

    // Now switch it out and fade back in
    $("#quotes").html(quotes[randomIndex]);
    $("#quotes").fadeIn("slow");
    currentQuote = randomIndex;
  });
}

nextQuote(true);
setInterval(function () {
  nextQuote(false);
}, 8000);
