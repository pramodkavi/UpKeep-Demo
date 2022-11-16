const districtSelect = document.getElementById("district");

const district = ['Refrigerator','Air Conditioner','Washer','TV','Solor Panel',
'Projector','AMP','Home Theater','Jaffna','Kalutara','Kandy','Kegalle',
'Kilinochchi','Kurunagala','Mannar','Matale','Matara','Monaragala',
'Mullaitivu','Nuwara Eliya'];

(function populateDistrict (){
    for(let i=0; i<district.length; i++){
        const option = document.createElement('option');
        option.textContent = district[i];
        districtSelect.appendChild(option);
    }
    districtSelect.value = 'Ampara';
})();