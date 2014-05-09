Social Sharing using FontAwesome for Wordpress
==============================================

Social sharing for WordPress using FontAwesome. Simple, clean code, no bulk.

This assumes you've already installed FontAwesome.

### Customization

Want to customize the social template? Copy the [default template](https://github.com/iloveitaly/wordpress-font-awesome-social/blob/master/templates/sharing.php) to `templates/social-fa-sharing.php` in your child theme.

Don't like the default CSS? Throw this in your `functions.php`

```php
wp_dequeue_style('social-fa-style');
```
TODO
----

* Pull Twitter handle from Yoast SEO and integrate into sharing text
* Sticky option
