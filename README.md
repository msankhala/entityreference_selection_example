# Entity reference selection handler example.

http://lookalive.co.uk/blog/drupal-entity-reference-how-make-custom-entity-reference-selection-handler

Why would you want to do this? A number of reasons. For me in Harmony Forum it was because the base Entity reference selection handler wasn't returning correct results on an autocomplete field and I've got custom access rules to consider, and due to future expansion it makes sense. **An alternative to making our own would be to use Views, but this idea doesn't appeal due to the performance overhead compared to EntityField Query.**

Behaviour handler examples can be found in the Entity reference module itself, Entityreference Prepopulate and Organic Groups.

Before we jump in, if the base generic Entity reference selection handler does most of what you want, and you only have a custom entity to integrate, all you need to do is name your class in a particular way and it'll be automatically used.

