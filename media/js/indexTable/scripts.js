$(document).ready(function(){
	$("button").button();
	
	$("#button").bind('click',saveTree);

	$('ol.sortable').nestedSortable({
		forcePlaceholderSize: true,
		handle: 'div.handle',
		helper:	'clone',
		items: 'li',
		opacity: .6,
		placeholder: 'placeholder',
		revert: 250,
		tabSize: 25,
		tolerance: 'pointer',
		toleranceElement: '> div.box',
		maxLevels: 10,
		isTree: true,
		expandOnHover: 700,
		startCollapsed: true
	});
        
        //$('#list_24').toggleClass('mjs-nestedSortable-collapsed').toggleClass('mjs-nestedSortable-expanded');

	//rozwijanie drzewa katalog�w
	$('.disclose').on('click', function() {
		$(this).closest('li').toggleClass('mjs-nestedSortable-collapsed').toggleClass('mjs-nestedSortable-expanded');
	});
	//
	
	//obs�uga otwierania okien
	$(".dialogboxlink").click(function ()
	{
		return false;
	});
	
	$(".dialogboxlink").bind('click', dialogboxlinkClick);
	//
});
	
function saveTree(){
    $.post("http://my-english.pl/check/treechange?dialog=1", $('ol.sortable').nestedSortable('serialize'), function(response){
            if(response == true)
            {
                    $("#button").fadeOut(500, function(){
                            $('.message strong').html(saved);
                            $('.message').fadeIn(500).delay(1000).fadeOut(500);
                    });
                    return true;
            }
            else
            {
                    alert("Error");
                    return false;
            }
    });	
}

function dialogboxlinkClick()
{
    $dialogboxUrl = $(this).attr('href');
    $title = $(this).html();		
    $wrapper = $('#dialogboxWrapper');
    $wrapper.html('');
    var title = $(this).html();

    $wrapper.load($dialogboxUrl+"?dialog=1", function()
    {
        $("#dialogboxWrapper").dialog({
            title: title,
            resizable: false,
            width: 800,
            modal: true,
            position: ['middle',80],
            hide: {effect: 'fade', duration: 400},
            show: {effect: 'fade', duration: 400},
        });
    });
}