
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


var app = window.app = new Vue({
    el: '#app',
    data:{
    	message: 'hello walter',
    	address: '',
    	searchBox: '',
    	input:'',
    	places: ''
    },
    watch:{
    	address: function(){
    		console.log('Loading');
    		/*
    		if(this.address >= 10){
    			this.locateAddress();	
    		} 
    		*/   		
    	}
    },
    computed: {
	    searchIndicator: function () {
	      if (this.isCalculating) {
	        return '⟳ Fetching new results'
	      } else if (this.searchQueryIsDirty) {
	        return '... Typing'
	      } else {
	        return '✓ Done'
	      }
	    }
	  },
    methods: {
    	createMap: function(){
		  this.map = new google.maps.Map(document.getElementById('map'), {
		    center: {lat: -32.9531426, lng: -60.6575427},
		    zoom: 12,
		    mapTypeId: google.maps.MapTypeId.ROADMAP,
		    disableDefaultUI: true,
		    zoomControl: true,

		   
		  });
		    this.input = document.getElementById('pac');
			this.searchBox = new google.maps.places.SearchBox(this.input);

			this.map.addListener('bounds_changed', function() {
			    this.searchBox.setBounds(this.map.getBounds());
			});

			this.searchBox.addListener('places_changed', function() {
			    this.places = this.searchBox.getPlaces();

			});
		},

		  locateAddress: function(){
		  	var geocoder = new google.maps.Geocoder();
		  	var vm = this;

		  	geocoder.geocode({ address: this.address }, function(results, status){
		  		
		  		setTimeout(function(){
		  			if(status === google.maps.GeocoderStatus.OK){
		  			vm.map.setCenter(results[0].geometry.location);	
			  		}

			  		new google.maps.Marker({
			  			map: vm.map,
			  			position: results[0].geometry.location
			  		});
			  		
		  		},1000);
		  		

		  	});
		  }
		 
		   }
    
});
