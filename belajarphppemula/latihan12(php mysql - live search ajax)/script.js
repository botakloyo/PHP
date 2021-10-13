const keyword = document.querySelector('#keyword');
const container = document.querySelector('.container');


keyword.addEventListener('keyup', function() {
    const xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
        if(xhr.readyState == 4 && xhr.status == 200) {
            container.innerHTML = xhr.responseText;
        }
    }
    xhr.open('GET', 'ajax/buku.php?keyword=' + keyword.value, true);
    xhr.send();
})