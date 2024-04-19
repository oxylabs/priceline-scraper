# Priceline Scraper API

[![Oxylabs promo code](https://user-images.githubusercontent.com/129506779/250792357-8289e25e-9c36-4dc0-a5e2-2706db797bb5.png)](https://oxylabs.go2cloud.org/aff_c?offer_id=7&aff_id=877&url_id=112)

[![](https://dcbadge.vercel.app/api/server/eWsVUJrnG5)](https://discord.gg/GbxmdGhZjq)

Oxylabs’ [Priceline Scraper](https://oxylabs.io/products/scraper-api/web/priceline?utm_source=github&utm_medium=repositories&utm_campaign=product) is a data gathering solution allowing you to extract real-time information from an Priceline website effortlessly. This brief guide explains how an Priceline Scraper works and provides code examples to understand better how you can use it hassle-free.

### How it works

You can get Priceline results by providing your own URLs to our service. We can return the HTML for any Priceline page you like.

#### Python code example

The example below illustrates how you can get HTML of Priceline page.

```python
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
```
Find code examples for other programming languages [**here**](https://github.com/oxylabs/priceline-scraper/tree/main/code%20examples)

#### Output Example
```json
{
  "results": [
    {
      "content": "<!DOCTYPE html><html lang=\"en\"><head><meta charSet=\"utf-8\"/><meta http-equiv=\"X-UA-Compatible\" conte ... </html>",
      "created_at": "2023-12-18 10:37:58",
      "updated_at": "2023-12-18 10:38:01",
      "page": 1,
      "url": "https://www.priceline.com/hotels?semprod=brand&refid=plgooglecpcbsl&refclickid=d%3ac%7c10941049094%7c460243569023%7cpriceline%7ce%7cg%7ckwd-10842441%7c9062284&gad_source=1&gclid=cj0kcqiayewrbhddarisagp1mwt8yb2nqslfysgnfq4tumcnvwpbyxa4bm_m6g-xxhg1ieghhdtyleyaasddealw_wcb&slingshot=1852",
      "job_id": "7142462996059549697",
      "status_code": 200
    }
  ]
}
```
With our Priceline Scraper, you can easily obtain public data from any Priceline webpage. Gather the necessary hotel and flight information such as pricing, client reviews, or detailed descriptions to evaluate the travel and lodging industry and gain a competitive edge. For any enquiries, feel free to connect with our support team via live chat or email us at hello@oxylabs.io.
