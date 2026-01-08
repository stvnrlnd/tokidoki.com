---
id: 16ea2337-8f2a-4a80-8d9f-3124ca043675
blueprint: html
title: 'RP Element: Fallback Parentheses for Ruby Annotations'
teaser: 'The rp HTML element is used to provide fallback parentheses around ruby text components in a ruby annotation. This ensures that the pronunciation or annotation is displayed in a readable format in browsers that do not support ruby annotations, by enclosing the ruby text in parentheses.'
reference_title:
  code: '<rp>'
  mode: htmlmixed
article:
  -
    type: paragraph
    content:
      -
        type: text
        text: 'The '
      -
        type: text
        marks:
          -
            type: code
        text: '<rp>'
      -
        type: text
        text: ' HTML element is used in conjunction with the '
      -
        type: text
        marks:
          -
            type: code
        text: '<ruby>'
      -
        type: text
        text: ' and '
      -
        type: text
        marks:
          -
            type: code
        text: '<rt>'
      -
        type: text
        text: ' elements to provide fallback text for browsers that do not support ruby annotations. Ruby annotations are often used in East Asian typography to provide pronunciation or meaning for characters, and the '
      -
        type: text
        marks:
          -
            type: code
        text: '<rp>'
      -
        type: text
        text: ' element ensures that the content remains understandable even if ruby support is not available.'
  -
    type: heading
    attrs:
      level: 3
    content:
      -
        type: text
        text: 'Usage and Characteristics'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'The '
      -
        type: text
        marks:
          -
            type: code
        text: '<rp>'
      -
        type: text
        text: ' element is used to wrap characters, typically parentheses, that will be displayed around the ruby text in browsers that do not support the '
      -
        type: text
        marks:
          -
            type: code
        text: '<ruby>'
      -
        type: text
        text: ' element. This provides a visual cue to users that there is additional annotation information. Here is an example of how the '
      -
        type: text
        marks:
          -
            type: code
        text: '<rp>'
      -
        type: text
        text: ' tag can be used:'
  -
    type: codeBlock
    attrs:
      language: null
    content:
      -
        type: text
        text: |-
          <ruby>
            漢 <rp>(</rp><rt>かん</rt><rp>)</rp>
            字 <rp>(</rp><rt>じ</rt><rp>)</rp>
          </ruby>
  -
    type: paragraph
    content:
      -
        type: text
        text: 'In this example, if the browser does not support ruby annotations, the text "漢(かん)字(じ)" will be displayed, indicating the pronunciation of each character.'
  -
    type: heading
    attrs:
      level: 3
    content:
      -
        type: text
        text: 'Valid Attributes for '
      -
        type: text
        marks:
          -
            type: code
        text: '<rp>'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'The '
      -
        type: text
        marks:
          -
            type: code
        text: '<rp>'
      -
        type: text
        text: ' element does not have specific attributes beyond the global attributes, which include:'
  -
    type: set
    attrs:
      id: m0iigfcs
      values:
        type: table
        size: md
        first_row_headers: true
        first_column_headers: true
        table:
          -
            cells:
              - Attribute
              - Description
          -
            cells:
              - class
              - 'Specifies one or more class names for the element, used for CSS styling.'
          -
            cells:
              - id
              - 'Defines a unique identifier for the element, useful for linking and JavaScript.'
          -
            cells:
              - style
              - 'Contains inline CSS styles for the element.'
          -
            cells:
              - title
              - 'Provides additional information about the element, often displayed as a tooltip.'
  -
    type: heading
    attrs:
      level: 3
    content:
      -
        type: text
        text: 'Benefits and Considerations'
  -
    type: bulletList
    content:
      -
        type: listItem
        content:
          -
            type: paragraph
            content:
              -
                type: text
                marks:
                  -
                    type: bold
                text: 'Fallback Support'
              -
                type: text
                text: ': The '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<rp>'
              -
                type: text
                text: ' element ensures that ruby annotations are still understandable in browsers that do not support the '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<ruby>'
              -
                type: text
                text: ' element by providing fallback text.'
      -
        type: listItem
        content:
          -
            type: paragraph
            content:
              -
                type: text
                marks:
                  -
                    type: bold
                text: Accessibility
              -
                type: text
                text: ': By offering a fallback mechanism, the '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<rp>'
              -
                type: text
                text: ' element helps maintain the readability and accessibility of text that includes ruby annotations.'
      -
        type: listItem
        content:
          -
            type: paragraph
            content:
              -
                type: text
                marks:
                  -
                    type: bold
                text: 'Styling Flexibility'
              -
                type: text
                text: ': While the '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<rp>'
              -
                type: text
                text: ' element is typically used to wrap parentheses, its appearance can be customized using CSS to fit the design of the webpage.'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'In summary, the '
      -
        type: text
        marks:
          -
            type: code
        text: '<rp>'
      -
        type: text
        text: ' element is an important part of the ruby annotation system, providing fallback text for browsers that do not support ruby annotations. It enhances the accessibility and readability of annotated text, ensuring that users can still understand the content even without native ruby support.'
link: 'https://html.spec.whatwg.org/multipage/text-level-semantics.html#the-rp-element'
seo_noindex: false
seo_nofollow: false
seo_canonical_type: entry
sitemap_change_frequency: weekly
sitemap_priority: 0.5
tags:
  - html
comments_allowed: true
group: ruby_annotations
updated_by: c00c8ed8-a262-4060-92e8-44c2c4931c51
updated_at: 1743366566
seo_title: 'HTML RP Element: Fallback Parentheses Explained'
seo_description: 'Learn about the rp HTML element for providing fallback parentheses in ruby annotations, ensuring readability in non-supporting browsers.'
og_title: 'Understanding the HTML RP Element'
og_description: 'Discover how the rp element in HTML is used to add fallback parentheses around ruby text, ensuring annotations are readable in browsers without ruby support.'
date: '2025-03-30'
---
