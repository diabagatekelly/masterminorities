import $ from 'jquery';

class Search {
    //1. describe and create/initiate our object
    constructor() {
        this.addSearchHTML();
        this.searchResults = $("#search-overlay__results");
        this.openButton = $(".dashicons-search");
        this.closeButton = $(".search-overlay__close");
        this.searchOverlay = $(".search-overlay");
        this.navbarCollapse = $("#navbarNav");
        this.searchField = $("#search-term");
        this.isSpinnerVisible = false;
        this.previousValue;
        this.typingTimer;
        this.events();
    }
    //2. events list
    events() {
        this.openButton.on('click', this.openOverlay.bind(this));
        this.closeButton.on('click', this.closeOverlay.bind(this));
        this.searchField.on('keyup', this.searchLogic.bind(this));
    }

    //3. methods (function, actions ...)
    searchLogic() {
        if(this.searchField.val() != this.previousValue || this.searchField.val() == '') {
            clearTimeout(this.typingTimer);

            if(this.searchField.val() != '') {
                if(!this.isSpinnerVisible) {
                    this.searchResults.html('<div class="spinner-loader"></div>');
                    this.isSpinnerVisible = true;
                }
                this.typingTimer = setTimeout(this.getResults.bind(this) , 750);
            }  else if(this.searchField.val() == '') {
                this.searchResults.html('');
                this.isSpinnerVisible = false;
            }
              
    }
        this.previousValue = this.searchResults.val();
    }

    getResults() {
        $.when(
        $.getJSON(siteData.root_url + '/wp-json/wp/v2/pages?search=' + this.searchField.val()), 
        $.getJSON(siteData.root_url + '/wp-json/wp/v2/posts?search=' + this.searchField.val()),
        $.getJSON(siteData.root_url + '/wp-json/wp/v2/videos?search=' + this.searchField.val()))
            .then((pages, posts, videos) => {
                var totalResults = pages[0].concat(posts[0], videos[0])
            this.searchResults.html(`
            <h2 class="search-overlay__section-title">Search Results</h2>
            ${totalResults.length ? '<ul class="link-list min-list">' : '<p>No search result matches found.</p>' }
            
            ${totalResults.map(item => `<li><a href="${item.link}">${item.title.rendered}</a></li>`).join('')}
        
            ${totalResults.length ? '</ul>' : ''}
            
                `)  
        }, ()=> {
            this.searchResults.html('<p>Unexpected error, please try again.</p>')
        })
        this.isSpinnerVisible = false;
    }

    openOverlay() {
        this.navbarCollapse.removeClass("show");
        this.searchOverlay.addClass("search-overlay--active");
        this.searchField.val('');
        this.searchResults.empty();
        setTimeout(() => this.searchField.focus(), 301);
        $("body").addClass("body-no-scroll");
        return false;
    }

    closeOverlay() {
        this.searchOverlay.removeClass("search-overlay--active");
        $("body").removeClass("body-no-scroll");
    }

    addSearchHTML() {
        $('body').append(`
        <div class="search-overlay">
        <div class="search-overlay__top">
          <div class="container">
            <i class="fa fa-search search-overlay__icon" aria-hidden="true"></i>
            <input type="search" id="search-term" class="search-field form-control-sm mr-sm-2 search-term"
                placeholder="What are you looking for?"/>
            <i class="fa fa-window-close search-overlay__close mt-5" aria-hidden="true"></i>
          </div>
        </div>
        <div class="container">
          <div id="search-overlay__results">
          </div>
        </div>
    </div>
        `)
    }
}

export default Search;