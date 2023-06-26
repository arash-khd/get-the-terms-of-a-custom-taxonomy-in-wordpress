# get-the-terms-of-a-custom-taxonomy-in-wordpress
get all terms of a custom taxonomy in wordpress and order count and limit with number (post per page)

as defualt when we get slug with get terms function the slug in not work correctly we should work
like this to get a correct link
```php
echo get_term_link( $term->slug, $term->taxonomy );
```
the below way not work correctly 
```php
echo $term->slug;
```
and if we want to get terms order by count we should use code

```php
$terms = get_terms("category", array('orderby' => 'count', 'order' => 'DESC','hide_empty'=>0 , 'number'=> 10));
```
and want our get terms function limited by number (posts per page in wp query ) we should user number parameter



