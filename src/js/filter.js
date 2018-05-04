(function () {
  const filterServices = document.getElementById('filter-services');
  const itemsServices = document.getElementById('services');

  const filterServicesCategory = document.getElementById('filter-stylists-category');
  const filterServicesCities = document.getElementById('filter-stylists-cities');
  const stylistsBlock = document.getElementById('stylists');

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

  const filter = function () {
    const itemsStylists = stylistsBlock.getElementsByClassName('card');

    for (let i = 0; i < itemsStylists.length; i += 1) {
      if ((filterServicesCategory.value === 'all' || filterServicesCategory.value === itemsStylists[i].dataset.category) &&
        (filterServicesCities.value === 'all' || filterServicesCities.value === itemsStylists[i].dataset.cities)) {
        itemsStylists[i].style.display = 'flex';
      } else {
        itemsStylists[i].style.display = 'none';
      }
    }
  };

  if (filterServices) {
    filterServices.addEventListener('change', servicesFilter);
  }
  filterServicesCategory.addEventListener('change', filter);
  filterServicesCities.addEventListener('change', filter);
}());
