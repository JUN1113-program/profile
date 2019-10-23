## ER図
![](https://user-images.githubusercontent.com/53249574/67368755-d64f0f00-f5b2-11e9-9619-8d19c5ae11b3.png)
## usersテーブル

|Column|Type|Options|
|------|----|-------|
|name|string|null: false|
|admin|boolean|null: false, defalut: false|
|email|string|null: false, unique: true|
|password|string|null: false|

### Association
- has_many :blogs
- has_one_attached :icons

## icons
|Column|Type|Options|
|------|----|-------|
|image|string|null: false|
|user_id|integer|null: false, foreign_key: true|

### Association
- belongs_to :user

## profilesテーブル
|Column|Type|Options|
|------|----|-------|
|introduction|text||
|career|text||
|certification|string||
|user_id|integer|null: false, foreign_key: true|

### Association
- belongs_to :user

## portfolios
|Column|Type|Options|
|------|----|-------|
|title|string|null: false|
|explanation|text|null: false|
|env|string|null: false|
|url|string||
|src|string||
|user_id|integer|null: false, foreign_key: true|

### Association
- belongs_to :user
- has_many :portfolio_images

## portfolio_images
|Column|Type|Options|
|------|----|-------|
|image|string|null: false|
|portfolio_id|integer|null: false, foreign_key: true|

### Association
- belongs_to :portfolio

## blogsテーブル
|Column|Type|Options|
|------|----|-------|
|title|string|null: false, add_index|
|content|text|null: false, add_index|
|user_id|integer|null: false, foreign_key: true|

### Association
- belongs_to :user
- has_many :blog_images

## blog_imagesテーブル
|Column|Type|Options|
|------|----|-------|
|image|string|null: false|
|blog_id|integer|null: false, foreign_key: true|

### Association
- belongs_to :blog