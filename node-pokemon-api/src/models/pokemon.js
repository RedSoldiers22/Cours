const validTypes = ['Plante', 'Poison', 'Feu', 'Eau', 'Insecte', 'Vol', 'Normal', 'Electrik', 'Fée']

module.exports = (sequelize, DataTypes) => {
    return sequelize.define('Pokemon', {
      id: {
        type: DataTypes.INTEGER,
        primaryKey: true,
        autoIncrement: true
      },
      name: {
        type: DataTypes.STRING,
        allowNull: false,
        unique: { 
          msg: 'Le nom est déjà pris.' // contraintes
        },
        validate: {
          notEmpty: { msg: "Le nom ne peut être vide"},
          notNull: { msg : 'Un nom est requis.'}
        }
      },
      hp: {
        type: DataTypes.INTEGER,
        allowNull: false,
        validate : {
          isInt: { msg : 'Utilisez uniquement des nombres entiers pour les hp.'}, // validateurs
          min: {
            args:[0],
            msg: 'Les points de vie doivent être supérieur à 0.'
          },
          max: {
            args:[999],
            msg: 'Les points de vie doivent être inférieur à 999.'
          },
          notNull: { msg : 'Les hp sont requis.'}
          
        }
      },
      cp: {
        type: DataTypes.INTEGER,
        allowNull: false,
        validate : {
          isInt: { msg : 'Utilisez uniquement des nombres entiers pour les cp.'},
          min: {
            args:[0],
            msg: 'Les points de compétences doivent être supérieur à 0.'
          },
          max: {
            args:[999],
            msg: 'Les points de compétences doivent être inférieur à 999.'
          } ,
          notNull: { msg : 'Les cp sont requis.'}
        }
      },
      picture: {
        type: DataTypes.STRING,
        allowNull: false,
        validate : {
          isURL: { msg : 'Utilisez uniquement une URL valide pour l\'image.'}, 
          notNull: { msg : 'Une image est requise.'}
        }
      },
      types: {
        type: DataTypes.STRING,
        allowNull: false,
        get(){
          return this.getDataValue('types').split(',') // définition d'un getter sequelize ("["Plante, Poison"]")
        },
        set(types){
          this.setDataValue('types', types.join()) // "Plante, Poison"
        },
        validate: {
          isTypesValid(value) {
            if(!value) {
              throw new Error('Un pokémon doit au moins avoir un type')
            }
            if(value.split(',').length > 3) {
              throw new Error('Un pokémon ne peux pas avoir plus de trois types.')
            }
            value.split(',').forEach( type =>  {
              if(!validTypes.includes(type)) {
                throw new Error(`Le type d'un pokémon doit appartenir à la liste suivant : ${validTypes}`)
              }   
            });
          }
        }
      }
     
    }, {
      timestamps: true,
      createdAt: 'created',
      updatedAt: false
    })
  }