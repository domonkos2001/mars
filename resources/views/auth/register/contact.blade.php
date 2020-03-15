<div class="input-field col s12">
    <input type="text" id="country" name="country" value="Hungary" class="autocomplete validate">
    <label for="country">@lang('info.country')</label>
    @error('country')
    <blockquote class="error">{{ $message }}</blockquote>
    @enderror
</div>
<script>
$(document).ready(function(){
    $('input.autocomplete').autocomplete({
      data: {
        "Afghanistan": null, "Albania":null, "Algeria": null, "Andorra": null, "Angola": null, "Antigua & Deps": null, "Argentina": null, "Armenia": null, "Australia": null, "Austria": null, "Azerbaijan": null, "Bahamas": null, "Bahrain": null, "Bangladesh": null, "Barbados": null, "Belarus": null, "Belgium": null, "Belize": null, "Benin": null, "Bhutan": null, "Bolivia": null, "Bosnia Herzegovina": null, "Botswana": null, "Brazil": null, "Brunei": null, "Bulgaria": null, "Burkina": null, "Burundi": null, "Cambodia": null, "Cameroon": null, "Canada": null, "Cape Verde": null, "Central African Rep": null, "Chad": null, "Chile": null, "China": null, "Colombia": null, "Comoros": null, "Congo": null, "Congo {Democratic Rep}": null, "Costa Rica": null, "Croatia": null, "Cuba": null, "Cyprus": null, "Czech Republic": null, "Denmark": null, "Djibouti": null, "Dominica": null, "Dominican Republic": null, "East Timor": null, "Ecuador": null, "Egypt": null, "El Salvador": null, "Equatorial Guinea": null, "Eritrea": null, "Estonia": null, "Ethiopia": null, "Fiji": null, "Finland": null, "France": null, "Gabon": null, "Gambia": null, "Georgia": null, "Germany": null, "Ghana": null, "Greece": null, "Grenada": null, "Guatemala": null, "Guinea": null, "Guinea-Bissau": null, "Guyana": null, "Haiti": null, "Honduras": null, "Hungary": null, "Iceland": null, "India": null, "Indonesia": null, "Iran": null, "Iraq": null, "Ireland {Republic}": null, "Israel": null, "Italy": null, "Ivory Coast": null, "Jamaica": null, "Japan": null, "Jordan": null, "Kazakhstan": null, "Kenya": null, "Kiribati": null, "Korea North": null, "Korea South": null, "Kosovo": null, "Kuwait": null, "Kyrgyzstan": null, "Laos": null, "Latvia": null, "Lebanon": null, "Lesotho": null, "Liberia": null, "Libya": null, "Liechtenstein": null, "": null, "Lithuania": null, "Luxembourg": null, "Macedonia": null, "Madagascar": null, "Malawi": null, "Malaysia": null, "Maldives": null, "Mali": null, "Malta": null, "Marshall Islands": null, "Mauritania": null, "Mauritius": null, "Mexico": null, "Micronesia": null, "Moldova": null, "Monaco": null, "Mongolia": null, "Montenegro": null, "Morocco": null, "Mozambique": null, "Myanmar, {Burma}": null, "Namibia": null, "Nauru": null, "Nepal": null, "Netherlands": null, "New Zealand": null, "Nicaragua": null, "Niger": null, "Nigeria": null, "Norway": null, "Oman": null, "Pakistan": null, "Palau": null, "Panama": null, "Papua New Guinea": null, "Paraguay": null, "Peru": null, "Philippines": null, "Poland": null, "Portugal": null, "Qatar": null, "Romania": null, "Russian Federation": null, "Rwanda": null, "St Kitts & Nevis": null, "St Lucia": null, "Saint Vincent & the Grenadines": null, "Samoa": null, "San Marino": null, "Sao Tome & Principe": null, "Saudi Arabia": null, "Senegal": null, "Serbia": null, "Seychelles": null, "Sierra Leone": null, "Singapore": null, "Slovakia": null, "Slovenia": null, "Solomon Islands": null, "Somalia": null, "South Africa": null, "South Sudan": null, "Spain": null, "Sri Lanka": null, "Sudan": null, "Suriname": null, "Swaziland": null, "Sweden": null, "Switzerland": null, "Syria": null, "Taiwan": null, "Tajikistan": null, "Tanzania": null, "Thailand": null, "Togo": null, "Tonga": null, "Trinidad & Tobago": null, "Tunisia": null, "Turkey": null, "Turkmenistan": null, "Tuvalu": null, "Uganda": null, "Ukraine": null, "United Arab Emirates": null, "United Kingdom": null, "United States": null, "Uruguay": null, "Uzbekistan": null, "Vanuatu": null, "Vatican City": null, "Venezuela": null, "Vietnam": null, "Yemen": null, "Zambia": null, "Zimbabwe": null
      },
    });
  });
</script>
<div class="input-field col s12 m12 l6">
    <input id="county" name="county" type="text" class="validate" value="{{ old('county') }}" required>
    <label for="county">@lang('info.county')</label>
    @error('county')
    <blockquote class="error">{{ $message }}</blockquote>
    @enderror
</div>
<div class="input-field col s12 m12 l6">
    <input id="zip_code" name="zip_code" type="number" class="validate" value="{{ old('zip_code') }}" required>
    <label for="zip_code">@lang('info.zip_code')</label>
    @error('zip_code')
    <blockquote class="error">{{ $message }}</blockquote>
    @enderror
</div>
<div class="input-field col s12">
    <input id="city" name="city" type="text" class="validate" value="{{ old('city') }}" required>
    <label for="city">@lang('info.city')</label>
    @error('city')
    <blockquote class="error">{{ $message }}</blockquote>
    @enderror
</div>
<div class="input-field col s12">
    <input id="street_and_number" name="street_and_number" type="text" class="validate" value="{{ old('street_and_number') }}" required>
    <label for="street_and_number">@lang('info.street_and_number')</label>
    @error('street_and_number')
    <blockquote class="error">{{ $message }}</blockquote>
    @enderror
</div>