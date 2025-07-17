var inputs = document.getElementsByTagName("input");
for (var input of inputs) {
    if (input.hasAttribute('required')) {
        input.onblur = testValideChampRequis;
    }
}

function testValideChampRequis() {
    if (this.value === '') {
        var champ = this.getAttribute('id');
        alert('Veuillez compléter le champ ' + champ + '.');
    }
}
