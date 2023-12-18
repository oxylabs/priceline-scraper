import requests
from pprint import pprint

# Structure payload.
payload = {
    'source': 'universal',
    'url': 'https://www.priceline.com/hotels?semprod=brand&refid=plgooglecpcbsl&refclickid=d%3ac%7c10941049094%7c460243569023%7cpriceline%7ce%7cg%7ckwd-10842441%7c9062284&gad_source=1&gclid=cj0kcqiayewrbhddarisagp1mwt8yb2nqslfysgnfq4tumcnvwpbyxa4bm_m6g-xxhg1ieghhdtyleyaasddealw_wcb&slingshot=1852'
}

# Get response.
response = requests.request(
    'POST',
    'https://realtime.oxylabs.io/v1/queries',
    auth=('user', 'pass1'),
    json=payload,
)

# Instead of response with job status and results url, this will return the
# JSON response with the result.
pprint(response.json())