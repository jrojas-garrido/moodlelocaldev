
YUI().use("node", "cookie","datatype-number","stylesheet",function (Y) {
	    //used just to show logging output
       var totalHeight = 0;
        window.thisisy = Y;
        Y.one("#yui-font-plus").on("click", function () {
        	var value = Y.Cookie.get("yuifont");
            if(value){
            	var newValue= Y.DataType.Number.parse(value)+1;
            }else{
            	var newValue = 15+1;
            }
            if(newValue>18){return;}
            
            Y.Cookie.set("yuifont", newValue, {
            	expires: new Date("January 12, 2025"),
                path: "/"           //all pages
            });

            /*to increase the height of asweomebar*/
            var tagDiv = Y.one('#awesomebar');
        	var height = (newValue-15+1);
        	
			if(tagDiv != null){	
				tagDiv.setStyle('height', (30 + height) + "px");
			}
        	totalHeight = 30+height; 			   
        	    	
            //Y.one("html, body").setStyle('font-size', Y.DataType.Number.parse(newValue)+'px');
            Y.one('body').setStyle('fontSize', Y.DataType.Number.parse(newValue) + 'px');
            //alert(newValue);
            
        	//alert(totalHeight + 'h');
        }); 
        

        Y.one("#yui-font-minus").on("click", function () {
        
        	var value = Y.Cookie.get("yuifont");
        	
        	//if user'll increased the height and  click on link of course or home page
        	//and click on minus page (for handle that kind of problem) 
        	if(totalHeight <= 0){
				if(value <=0){
        			value = 15;
        		}
        		var heightDiff = value - 15;
        		totalHeight = 30 + heightDiff; 
        		//alert(totalHeight + 's ' + value);
        	}
        	
            if(value){
            	var newValue= Y.DataType.Number.parse(value)-1;
            }else{
            	var newValue = 15-1;
            }
            
            if(newValue<11){return;}
            
            Y.Cookie.set("yuifont", newValue, {
            	expires: new Date("January 12, 2025"),
                path: "/"           //all pages
            });
            
            // increase the height according awesomebar to slider
            var tagDiv = Y.one('#awesomebar');
            
           
        	var height = (newValue-15);
        	//tagDiv.setStyle('height', (30 - height) + "px");
        			totalHeight -= 1;   
        	if(tagDiv != null){
        		tagDiv.setStyle('height', (totalHeight) + "px");
        	}
        	
			//alert(totalHeight);
		    Y.one('body').setStyle('fontSize', Y.DataType.Number.parse(newValue) + 'px');
            //alert(newValue);
            
			    	
        });


    });