jQuery(document).ready(function($) {
    // Initialize all collapsible elements
    $('.collapse').collapse({
        toggle: false
    });

    // Handle accordion behavior
    $('.panel-heading a').on('click', function(e) {
        e.preventDefault();
        var $target = $($(this).attr('href'));
        
        // Close all other open panels
        $('.panel-collapse').not($target).collapse('hide');
        
        // Toggle the clicked panel
        $target.collapse('toggle');
    });


    // Facility Tabs
    // Facility Tabs
    function initFacilityTabs() {
        // Hide all facility info panels
        $('.facility-info').removeClass('active').hide();
        
        // Show first tab content by default
        $('.facility-tabs .facility-tab:first').addClass('active');
        $('#' + $('.facility-tabs .facility-tab:first').data('tab')).addClass('active').show();
        
        // Handle tab click
        $('.facility-tab').on('click', function(e) {
            e.preventDefault();
            
            // Remove active class from all tabs
            $('.facility-tab').removeClass('active');
            
            // Add active class to clicked tab
            $(this).addClass('active');
            
            // Hide all content
            $('.facility-info').removeClass('active').hide();
            
            // Show corresponding content with fade effect
            const tabId = $(this).data('tab');
            $('#' + tabId).addClass('active').fadeIn(300);
        });
    }
    
    // Initialize tabs
    initFacilityTabs();

    
});