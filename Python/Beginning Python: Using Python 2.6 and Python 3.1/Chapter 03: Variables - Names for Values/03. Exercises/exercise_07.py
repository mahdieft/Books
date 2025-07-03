milk_expiration = (9, 12, 2025)
milk_carton = {
    'expiration_date': milk_expiration,
    'fl_oz': 12,
    'cost': 12,
    'brand_name': 'Dairy Farm',
}

print('Cost of six carton is: %d' % (6 * milk_carton['cost']))