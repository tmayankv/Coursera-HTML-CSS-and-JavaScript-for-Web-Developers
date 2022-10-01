

(function () {

    var names = ["Monica", "John", "Jeni", "Jordon", "Heyman", "John JR", "Max", "Barney", "Ross", "Joey"];
    
    for (var i = 0; i < names.length; i++) {
      var firstletter = names[i].charAt(0).toLowerCase();
    
      if (firstletter === 'j') {
        bye(names[i]);
      }
      else {
        hello(names[i]);
      }
    }
    
    })();
    
    
    