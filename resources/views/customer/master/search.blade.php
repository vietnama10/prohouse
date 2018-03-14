<div class="search-head col-lg-4">
  <span class="search-icon"><i class="fas fa-search"></i></span>
  <span><strong>Find Your Home</strong></span>
</div>
<form>
  <div class="form-row">
    <div class="col-md-3 mb-3">
      <label for="keyword">Keyword</label>
      <input type="text" class="form-control" id="keyword" placeholder="Keyword">
    </div>
    <div class="col-md-3 mb-3">
      <label for="propertyId">Property ID</label>
      <input type="text" class="form-control" id="propertyId" placeholder="Property ID">
    </div>
    <div class="col-md-3 mb-3">
      <label for="location">Location</label>
      <input type="text" class="form-control" id="location" placeholder="Location">
    </div>
    <div class="form-group col-md-3 mb-3">
      <label for="inputType">Type of property</label>
      <select id="inputType" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-3 mb-3">
      <label for="inputInterior">Interior of property</label>
      <select id="inputInterior" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-3 mb-3">
      <label for="bedroom">Bedroom</label>
      <select id="bedroom" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-3 mb-3">
      <label for="priceRange">Price Range</label>
      <select id="priceRange" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="col-md-3 mb-3">
      <button id="btnSearch" class="btn btn-primary search-btn" type="submit">Search</button>
    </div>
  </div>
</form>