var textarea = document.getElementsByTagName('textarea');

console.log(textarea);

for (let i = 0; i < textarea.length; i++) {
    textarea[i].oninput = () => {
        textarea[i].style.height = ''; // reset  height
        textarea[i].style.height = textarea[i].scrollHeight + "px";
    };
}
