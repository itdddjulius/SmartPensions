Rails.application.routes.draw do
  get 'catch_all/index'
  # For details on the DSL available within this file, see https://guides.rubyonrails.org/routing.html
  # get '/pages/:id', to: 'pages#show'
  root :to => 'pages#index'
  resources :pages, only: [:index]
  # match "*path", to: "pages#show", via: :all
  get  "*path",  :to => redirect('/index.html')
end
