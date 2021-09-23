import json
import requests
from configu import *

def authLambdasBitcoin():
    url = 'https://fduhwb4b90.execute-api.us-east-1.amazonaws.com/DESA/agente-bitcoin/authentication'
    payload = json.dumps({"user_tenant": "dev","password_tenant": "dev.*"})
    headers = {'x-api-key': '6lLxq76Efr4Fm37m42ply87S3Qettsee9oXQiLZx','Content-Type': 'application/json'}
    response = requests.request("POST", url, headers=headers, data=payload)
    
    res = json.loads(response.text)
    return res['token']

def requestApiLambda(url, payload, headers):
    response = requests.request("POST", url, headers=headers, data=payload)
    res = json.loads(response.text)
    return res

def lambdaLogin(email, password):
    url = 'https://fduhwb4b90.execute-api.us-east-1.amazonaws.com/DESA/agente-bitcoin/user/login'
    payload = json.dumps({
      "email": email,
      "password": password
    })
    token = authLambdasBitcoin()
    headers = {'x-api-key': XAPIKEY, 'Authorization': 'Bearer ' + token,'Content-Type': 'application/json'}
    res = requestApiLambda(url, payload, headers)
    return res

def lambdaRegistro(email, password):
    url = 'https://fduhwb4b90.execute-api.us-east-1.amazonaws.com/DESA/agente-bitcoin/user/register'
    payload = json.dumps({
      "email": email,
      "password": password
    })
    token = authLambdasBitcoin()
    headers = {'x-api-key': XAPIKEY, 'Authorization': 'Bearer ' + token,'Content-Type': 'application/json'}
    res = requestApiLambda(url, payload, headers)
    return res