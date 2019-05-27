
## Ocr (php 的认证服务 SDK)


- 人脸对比 FaceOcr

### 一，人脸对比

*使用方法*

```php
/*
* 人脸图像1
* 人脸图像2
* 图像类型[BASE64,URL]
*/
FaceOcr::doFaceOcr($img_1,$img_2,'URL');
```

成功返回对比分值
- `score` (必须)对比结果(分值)，推荐阈值为80及以上

