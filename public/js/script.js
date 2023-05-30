// 削除ボタンがクリックされたときの処理
function handleRemoveButtonClick() {
    var tagElement = this.parentNode;
    var displayContainer = tagElement.parentNode;
    displayContainer.removeChild(tagElement);
}

// 追加ボタンがクリックされたときの処理
function handleAddButtonClick() {
    var tagInput = document.getElementById('tagInput');
    var tagName = tagInput.value.trim();

    if (tagName !== '') {
        var tagElement = document.createElement('span');
        tagElement.className = 'tag';
        tagElement.textContent = tagName;

        var removeButton = document.createElement('button');
        removeButton.className = 'removeButton';
        removeButton.textContent = '×';
        removeButton.addEventListener('click', handleRemoveButtonClick);

        tagElement.appendChild(removeButton);

        var displayContainer = document.getElementById('displayContainer');
        displayContainer.appendChild(tagElement);

        tagInput.value = '';
    }
}

// 削除ボタンのクリックイベントを設定
var removeButtons = document.getElementsByClassName('removeButton');
for (var i = 0; i < removeButtons.length; i++) {
    removeButtons[i].addEventListener('click', handleRemoveButtonClick);
}

// 追加ボタンのクリックイベントを設定
var addButton = document.getElementById('addButton');
addButton.addEventListener('click', handleAddButtonClick);