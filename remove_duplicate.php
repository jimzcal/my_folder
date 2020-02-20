<script type="text/javascript">
function removeDups(str) {
  var uniqueLetters = [];
  var nonUniqueLetters = [];
  str.split('').filter(function(letter) {
    if(uniqueLetters.indexOf(letter) == -1) {
      uniqueLetters.push(letter);
    } else {
      nonUniqueLetters.push(letter);
    }
  });
  
  var result = uniqueLetters.filter(function(ltr) {
    if(nonUniqueLetters.indexOf(ltr) == -1) {
      return ltr;
    }
  });
  
  return result;
}

var myString = 'Certification';

alert(removeDups(myString));
</script>