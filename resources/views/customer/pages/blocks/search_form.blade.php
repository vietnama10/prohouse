<div class="search-head col-lg-4">
  <span class="search-icon"><i class="fas fa-search"></i></span>
  <span><strong>Find Your Home</strong></span>
</div>
<form method="GET" action="search">
  <div class="form-row">
    <div class="col-md-3 mb-3">
      <label for="keyword">Keyword</label>
      <input type="text" name="key" class="form-control" id="keyword" placeholder="Keyword">
    </div>
    <!-- <div class="col-md-3 mb-3">
      <label for="propertyId">Property ID</label>
      <input type="text" class="form-control" id="propertyId" placeholder="Property ID">
    </div> -->
    <div class="col-md-3 mb-3">
      <label for="location">Location</label>
      <select id="location" name="location" class="form-control">
        <option value="" selected>Choose...</option>
        <option value="District 1">District 1</option>
        <option value="District 2">District 2</option>
        <option value="District 3">District 3</option>
        <option value="District 4">District 4</option>
        <option value="District 5">District 5</option>
        <option value="District 6">District 6</option>
        <option value="District 7">District 7</option>
        <option value="District 8">District 8</option>
        <option value="Binh Thanh">Binh Thanh</option>
        <option value="Phu Nhuan">Phu Nhuan</option>
        <option value="Nha Be">Nha Be</option>
        <option value="Binh Chanh">Binh Chanh</option>
      </select>
    </div>
    <div class="form-group col-md-3 mb-3">
      <label for="inputType">Type of property</label>
      <select id="inputType" name="type" class="form-control">
        <option value="" selected>Choose...</option>
        @foreach($products_by_type as $data)
        <option value="{{ $data['type_id'] }}">{{$data['type_name']}}</option>
        @endforeach
      </select>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-3 mb-3">
      <label for="inputInterior">Interior of property</label>
      <select id="inputInterior" name="interior" class="form-control">
        <option value="" selected>Choose...</option>
        <option value="Full furnished">Full furnished</option>
        <option value="No furniture">No furniture</option>
        <option value="A part furnished">A part furnished</option>
      </select>
    </div>
    <div class="form-group col-md-3 mb-3">
      <label for="bedroom">Bedroom</label>
      <select id="bedroom" name="bedroom" class="form-control">
        <option value="" selected>Choose...</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
      </select>
    </div>
    <div class="form-group col-md-3 mb-3">
      <label for="priceRange">Price Range</label>
      <select id="priceRange" name="price-range" class="form-control">
        <option value="" selected>Choose...</option>
        <option value="100-400">$100 - $400</option>
        <option value="400-800">$500 - $800</option>
        <option value="800-1200">$800 - $1,200</option>
        <option value="1200-2000">$1,200 - $2,000</option>
      </select>
    </div>
    <div class="col-md-3 mb-3">
      <button id="btnSearch" class="btn btn-primary search-btn" type="submit">Search</button>
    </div>
  </div>
</form>