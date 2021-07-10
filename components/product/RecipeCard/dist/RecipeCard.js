'use strict'
var __assign =
  (this && this.__assign) ||
  function () {
    __assign =
      Object.assign ||
      function (t) {
        for (var s, i = 1, n = arguments.length; i < n; i++) {
          s = arguments[i]
          for (var p in s)
            if (Object.prototype.hasOwnProperty.call(s, p)) t[p] = s[p]
        }
        return t
      }
    return __assign.apply(this, arguments)
  }
var __rest =
  (this && this.__rest) ||
  function (s, e) {
    var t = {}
    for (var p in s)
      if (Object.prototype.hasOwnProperty.call(s, p) && e.indexOf(p) < 0)
        t[p] = s[p]
    if (s != null && typeof Object.getOwnPropertySymbols === 'function')
      for (var i = 0, p = Object.getOwnPropertySymbols(s); i < p.length; i++) {
        if (
          e.indexOf(p[i]) < 0 &&
          Object.prototype.propertyIsEnumerable.call(s, p[i])
        )
          t[p[i]] = s[p[i]]
      }
    return t
  }
exports.__esModule = true
var classnames_1 = require('classnames')
var link_1 = require('next/link')
var RecipeCard_module_css_1 = require('./dist/RecipeCard.module.css')
var image_1 = require('next/image')
var placeholderImg = '/product-img-placeholder.svg'
var RecipeCard = function (_a) {
  var _b
  var className = _a.className,
    recipe = _a.recipe,
    variant = _a.variant,
    imgProps = _a.imgProps,
    props = __rest(_a, ['className', 'recipe', 'variant', 'imgProps'])
  return (
    //<Link href={`/product/${recipe.id}`} {...props}>
    React.createElement(
      link_1['default'],
      __assign({ href: recipe.url }, props),
      React.createElement(
        'a',
        {
          className: classnames_1['default'](
            RecipeCard_module_css_1['default'].root,
            ((_b = {}),
            (_b[RecipeCard_module_css_1['default'].simple] =
              variant === 'simple'),
            _b),
            className
          ),
        },
        variant === 'slim'
          ? React.createElement(
              'div',
              { className: 'container' },
              React.createElement(
                'div',
                { className: 'root' },
                React.createElement(
                  'figure',
                  { className: RecipeCard_module_css_1['default'].thumb },
                  React.createElement(
                    image_1['default'],
                    __assign(
                      {
                        className:
                          RecipeCard_module_css_1['default'].recipeImage,
                        quality: '85',
                        src: recipe.photo_url || placeholderImg,
                        alt: recipe.title || 'Product Image',
                        height: 320,
                        width: 320,
                        layout: 'fixed',
                      },
                      imgProps
                    )
                  ),
                  React.createElement(
                    'figcaption',
                    { className: RecipeCard_module_css_1['default'].caption },
                    React.createElement(
                      'h2',
                      { className: RecipeCard_module_css_1['default'].title },
                      recipe.title
                    ),
                    React.createElement(
                      'p',
                      { className: RecipeCard_module_css_1['default'].snippet },
                      recipe.rating_stars,
                      ' (',
                      recipe.review_count,
                      ')'
                    ),
                    React.createElement(
                      'a',
                      {
                        href: '',
                        className: RecipeCard_module_css_1['default'].button,
                      },
                      'View Original'
                    )
                  )
                )
              )
            )
          : React.createElement(
              React.Fragment,
              null,
              React.createElement('div', {
                className: RecipeCard_module_css_1['default'].squareBg,
              }),
              React.createElement(
                'div',
                {
                  className:
                    'flex flex-row justify-between box-border w-full z-20 absolute',
                },
                React.createElement(
                  'div',
                  { className: 'absolute top-0 left-0 pr-16 max-w-full' },
                  React.createElement(
                    'h3',
                    {
                      className: RecipeCard_module_css_1['default'].recipeTitle,
                    },
                    React.createElement('span', null, recipe.title)
                  ),
                  React.createElement(
                    'span',
                    {
                      className:
                        RecipeCard_module_css_1['default'].productRating,
                    },
                    recipe.rating_stars,
                    '\u00A0 (',
                    recipe.review_count,
                    ')'
                  )
                )
              ),
              React.createElement(
                'div',
                {
                  className: RecipeCard_module_css_1['default'].imageContainer,
                },
                React.createElement(
                  image_1['default'],
                  __assign(
                    {
                      alt: recipe.title || 'Recipe Image',
                      className: RecipeCard_module_css_1['default'].recipeImage,
                      src: recipe.photo_url || placeholderImg,
                      height: 540,
                      width: 540,
                      quality: '85',
                      layout: 'responsive',
                    },
                    imgProps
                  )
                )
              )
            )
      )
    )
  )
}
exports['default'] = RecipeCard
