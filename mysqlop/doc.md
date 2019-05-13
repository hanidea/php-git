### 获取数据接口
* Uri `http://localhost:8888/mysqlop/pdo.php`
* Method `GET`
* Request
page_size    否 Int 每页展示多少条数据，默认为10
page_index   是 Int 当前的页码
* Response
```
{
    "code": 0,
    "message":"success",
    "info":{
        "count": 100,
        "total_page": 10,
        "data": [
            {
                "id": 1,
                "name":"测试"
            }
        ]
    }
}

```