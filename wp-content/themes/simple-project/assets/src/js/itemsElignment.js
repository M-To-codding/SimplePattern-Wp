
function alignImagesInPosts() {
    var postItems = document.querySelectorAll('.post-item');
    for (var i = 0; i < postItems.length; i++) {
        var image = findChildByClassRecursive(postItems[i], 'post-image');
        if (image && image.offsetWidth > postItems[i].offsetWidth) {
            image.style.marginLeft = "-80px";
        }
    }
}

function findChildByClassRecursive(parentElement, className) {
    for (var i = 0; i < parentElement.childNodes.length; i++) {
        var child = parentElement.childNodes[i];
        if (child.childNodes.length > 0) {
            var foundInChild = findChildByClassRecursive(child, className);
            if (foundInChild)
                return foundInChild;
        }
        if (child && child.className === className) {
            return parentElement.childNodes[i];
        }
    }
}