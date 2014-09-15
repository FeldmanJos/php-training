$(function(){
    var name = $("#name");
    name.keyup(function() {
        var $this = $(this);
      var nameLength = $this.val().length;

      if (nameLength >= 13) {
         $this.css('background-color', '#FF0000');
      } else {
         $this.css('background-color', '#FFFFFF');
      }
    });
    
    name.blur(function(){
        var $this = $(this);
        var nameLength = $this.val().length;
        if (nameLength == 0) {     
         $this.css('background-color', '#FFFAAA');
        }
    });
    
    var pass = $("#pass");
    pass.keyup(function() {
        var $this = $(this);
      var passLength = $this.val().length;

      if (passLength >= 13) {
         $this.css('background-color', '#FF0000');
      } else {
         $this.css('background-color', '#FFFFFF');
      }
    });
    
    pass.blur(function(){
        var $this = $(this);
        var passLength = $this.val().length;
        if (passLength == 0) {     
         $this.css('background-color', '#FFFAAA');
        }
    });
    
    $("#signupb").click(function(){
        var nameL = $("$name").val().length;
        var passL = $("$pass").val().length;
        if (nameL == 0 || nameL >= 13) {
            $("#form-login").submit();
        }
    });
    $("#form-login").submit(function(){
      //control
      var condition = name.val().length > 0 || pass.val().length > 0;
      if (condition) {
          return false
      }
    });
    
});
