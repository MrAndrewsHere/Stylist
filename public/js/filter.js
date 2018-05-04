(function () {
  const filterServices = document.getElementById('filter-services');
  const itemsServices = document.getElementById('services');

  const servicesFilter = function () {
    const items = itemsServices.getElementsByClassName('card');

    for (let i = 0; i < items.length; i += 1) {
      if (items[i].classList.contains(this.value) || items[i].classList.contains('all')) {
        items[i].style.display = 'flex';
      } else {
        items[i].style.display = 'none';
      }
    }
  };

  filterServices.onchange = servicesFilter;


  const filterStylistsCategory = document.getElementById('filter-stylists-category');
  const filterStylistsCities = document.getElementById('filter-stylists-cities');
  const itemsStylists = document.getElementById('stylists');

  const stylistsFilter = function () {
    const items = itemsStylists.getElementsByClassName('card');

    for (let i = 0; i < items.length; i += 1) {
      if (((filterStylistsCategory.value === 'all') || (filterStylistsCategory.value === items[i].dataset.category)) &&
        ((filterStylistsCategory.value === 'all') || (filterStylistsCategory.value === items[i].dataset.cities))) {
        items[i].style.display = 'flex';
      } else {
        items[i].style.display = 'none';
      }
    }
  };

  filterStylistsCategory.onchange = stylistsFilter;
  filterStylistsCities.onchange = stylistsFilter;
}());
