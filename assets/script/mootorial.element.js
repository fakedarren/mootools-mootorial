Element.implement({
	getAllAdjacentSiblings: function(selector){
		
		var matches = [];
		var trappingPrevious = true;
		var trappingNext = true;
		
		this.getAllPrevious().each(function(el){
			if (trappingPrevious && el.match(selector)){
				matches.push(el);
			} else {
				trappingPrevious = false;
			}
		});
		
		this.getAllNext().each(function(el){
			if (trappingNext && el.match(selector)){
				matches.push(el);
			} else {
				trappingNext = false;
			}
		});
		
		return $$(matches);
	}
});