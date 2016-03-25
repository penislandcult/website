function myFunction(clickedId) {
    document.calc.result.value+=clickedId;
}
function Clear() {
    document.calc.result.value="";
}
function compute() {
    try{
    var inp=eval(document.calc.result.value);
    document.calc.result.value=inp;
    }catch(err){
            document.calc.result.value="error";
    }
}
function sqrt(){
  var inputNum1=document.calc.result.value;
  var result = Math.sqrt(inputNum1);
  document.calc.result.value = result;
}