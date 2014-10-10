jQuery(function() {
    jQuery('iframe.chartblocks-embed').each(function() {
        var $this = jQuery(this);
        var originalHeight = $this.attr('height');
        var originalWidth = $this.attr('width');


        var resize = function() {
            var width = $this.outerWidth(true);
            var height = $this.outerWidth(true);
            
            var widthRatio = width / originalWidth;
            var heightRatio = height / originalHeight;

            var ratio = widthRatio > heightRatio ? heightRatio : widthRatio;
            $this.attr('height', ratio * originalHeight);
            $this.attr('width', ratio * originalWidth);

        };
        

        $this.resize(resize);
        resize.apply($this.get(0));
    });
});