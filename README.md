<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Users API

This is a simple RESTful API with one endpoint.
Accepts JSON user data, formats it and returns JSON response.

### Endpoint
GET api/v1/users
Lists formatted user names.

### Request example
curl -H "X-API-Key:myapikey" -X GET "http://127.0.0.1:8000/api/v1/users"

### Response example
{
    "users":[
        {
            "full_name":"Tom Tucker"
        },
        {
            "full_name":"Don Tucker"
        }
    ]
}

### Authorization requirements
Authorization type: API Key
Add to: Header "X-API-Key:myapikey"

### Configuration
In the .env file specify:
- USERS_BASE_URL
- API_KEY
