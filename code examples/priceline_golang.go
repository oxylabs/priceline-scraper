package main

import (
	"bytes"
	"encoding/json"
	"fmt"
	"io/ioutil"
	"net/http"
)

func main() {
	const Username = "YOUR_USERNAME"
	const Password = "YOUR_PASSWORD"

	payload := map[string]string{
		"source": "universal",
		"url": "https://www.priceline.com/hotels?semprod=brand&refid=plgooglecpcbsl&refclickid=d%3ac%7c10941049094%7c460243569023%7cpriceline%7ce%7cg%7ckwd-10842441%7c9062284&gad_source=1&gclid=cj0kcqiayewrbhddarisagp1mwt8yb2nqslfysgnfq4tumcnvwpbyxa4bm_m6g-xxhg1ieghhdtyleyaasddealw_wcb&slingshot=1852",
	}

	jsonValue, _ := json.Marshal(payload)

	client := &http.Client{}
	request, _ := http.NewRequest("POST",
		"https://realtime.oxylabs.io/v1/queries",
		bytes.NewBuffer(jsonValue),
	)

	request.SetBasicAuth(Username, Password)
	response, _ := client.Do(request)

	responseText, _ := ioutil.ReadAll(response.Body)
	fmt.Println(string(responseText))
}