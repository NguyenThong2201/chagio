import CommonRepository from './CommonRepository';

const repositories = {
    'common': CommonRepository,
};

export const RepositoryFactory = {
    get: name => repositories[name]
};
