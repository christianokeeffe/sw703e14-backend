sw703e14-backend
================

available routes:

BASE/appliance/@id/@lang
    -> @id : integer
    -> @lang : string, currently available: en or da
    [returns json encoded appliance object]

BASE/appliances/@lang
    -> @lang : string, currently available: en or da
    [returns json encoded array of appliance objects]