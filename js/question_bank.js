function getIndex() {
    var num = document.getElementById("number-test-cases").selectedIndex;
    var testcase = ''
    for(var i = 0; i<num; i++){
        testcase+='Input: <input type="text"> Output: <input type="text"><br>'
    }
    document.getElementById("question-test-cases").innerHTML = testcase + '<input type="submit">';

}

