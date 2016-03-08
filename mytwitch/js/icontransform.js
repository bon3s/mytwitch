$('#buttonleft').on('click', function () {
var iSelector = $(this).find('i:first');

if (iSelector.hasClass('glyphicon-filter')) {
iSelector.removeClass('glyphicon-filter')
iSelector.addClass('glyphicon-remove')
} 

else if (iSelector.hasClass('glyphicon-remove')) {
iSelector.removeClass('glyphicon-remove')
iSelector.addClass('glyphicon-filter')
}
});
       