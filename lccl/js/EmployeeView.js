var EmployeeView = function () {
    this.render = function (z_index) {
        
      // var cou= $('.ccl-social-wall .grid-item').length();
       var numItems = $('.ccl-social-wall').children('.grid-item').length-1;
      // console.log(numItems);
        var random_child_index = Math.floor((Math.random() * numItems) + 1);
        if (z_index == 1) {
            this.random_index_last_value = random_child_index;
        }
        if (this.random_index_last_value == random_child_index && z_index != 1) {
            random_child_index = Math.floor((Math.random() * numItems) + 1);
            this.random_index_last_value = random_child_index;
        }
        this.random_index_last_value = random_child_index;
        this.cloned_popup = $($('.grid').children()[random_child_index]);
        
        this.original_width = this.cloned_popup.width();
        this.original_position = this.cloned_popup.position()
        this.original_top = this.original_position ? this.original_position.top : 0;
        this.original_left = this.original_position ? this.original_position.left: 0;
        this.original_margin = this.cloned_popup.css("marginLeft");
        this.child_1_width = $(this.cloned_popup.children()[0]).width();
        this.child_1_child_width = $($(this.cloned_popup.children()[0]).children()[0]).width();
        this.child_2_width = $(this.cloned_popup.children()[1]).width();
        if (z_index == 1) {
            this.cloned_popup.css('transform', 'none');
        }
        var self = this;
        if (this.original_left == 0 && this.original_top == 0) {
            setTimeout(function () {
                self.original_position = self.cloned_popup.position();
                self.original_top = self.original_position.top;
                self.original_left = self.original_position.left;
                self.renderAnimation(z_index);
            },
                    2000);
        } else {
            this.renderAnimation(z_index);
        }
    };
    this.renderAnimation = function (z_index) {
        this.cloned_popup.addClass('popupimg');
        this.cloned_popup.transition({top: "10px", left: "10px", marginLeft: "10px", width: "auto", height: "auto", duration: 500});
        this.cloned_popup.css('z-index', z_index);
        $(this.cloned_popup.children()[0]).css('max-width', '400px');
        $(this.cloned_popup.children()[0]).css('width', 'auto');
        $($(this.cloned_popup.children()[0]).children()[0]).transition({width: "100%"});
        setTimeout(function () {
            $(self.cloned_popup.children()[1]).css({display: "block"});
//                $(self.cloned_popup.children()[1]).transition({width: "300px", height:'auto', display: "block", duration: 1000});
        },100);
        var self = this;
        setTimeout(
                function ()
                {
                    self.cloned_popup.removeClass('grid-item-dimentions');
                    self.cloned_popup.transition({top: self.original_top, left: self.original_left, marginLeft: self.original_margin, width: self.original_width, duration: 500});
                    self.cloned_popup.css('z-index', z_index);
                    self.cloned_popup.removeClass('popupimg');
                    $(self.cloned_popup.children()[0]).css('width', self.original_width);
                    $($(self.cloned_popup.children()[0]).children()[0]).transition({width: self.original_width});
                    $(self.cloned_popup.children()[1]).css({display: "none"});
//                    $(self.cloned_popup.children()[1]).transition({width: self.original_width, display: "none", duration: 500});
                    z_index++;
                    setTimeout(function () {
                        self.render(z_index);
                    },
                            500);
                }, 5000);
    };
}
